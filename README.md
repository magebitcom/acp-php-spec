# ACP PHP Specification

PHP interfaces for the [Agentic Commerce Protocol (ACP)](https://www.agenticcommerce.dev/), generated
from the official JSON Schema bundles vendored under `spec/`.

## Installation

```bash
composer require magebitcom/acp-php-spec
```

## What's included

One interface per schema type, namespaced by the bundle it comes from:

| Namespace | Bundle | Covers |
|---|---|---|
| `Magebit\AcpSpec\Api\AgenticCheckout` | `schema.agentic_checkout.json` | Checkout sessions, line items, fulfillment, messages, orders |
| `Magebit\AcpSpec\Api\Cart` | `schema.cart.json` | Cart create/update |
| `Magebit\AcpSpec\Api\DelegateAuthentication` | `schema.delegate_authentication.json` | 3DS delegated authentication |
| `Magebit\AcpSpec\Api\DelegatePayment` | `schema.delegate_payment.json` | Payment delegation and allowances |
| `Magebit\AcpSpec\Api\Discount` | `schema.discount.json` | Discount extension |
| `Magebit\AcpSpec\Api\Extension` | `schema.extension.json` | Extension declarations |
| `Magebit\AcpSpec\Api\Feed` | `schema.feed.json` | Product feed |

### Why the bundle namespace matters

ACP defines several unrelated types under one name — `Address` appears in three bundles, `Error` in
four, `Link` and `AuthenticationResult` in two. The bundle namespace keeps them apart, so there is no
rename map and no arbitrary "last file wins" arbitration. `AgenticCheckout\AddressInterface` and
`DelegatePayment\AddressInterface` are genuinely different shapes and stay that way.

### One mutable tree, not two

Every interface has getters *and* setters, and there is exactly one tree. A read-only variant would
double the surface for no benefit: an implementation that must not be mutated is enforced by the
class, not by which interface it happens to implement.

## Usage

```php
use Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface;

class MyMessage implements MessageErrorInterface
{
    private string $content;

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    // ... plus getType/setType, getCode/setCode, getSeverity/setSeverity, ...
}
```

Every interface also carries constants, which is usually the fastest way in:

```php
MessageErrorInterface::KEY_CONTENT;          // 'content'      — the wire key
MessageErrorInterface::TYPE_ERROR;           // 'error'        — a const discriminator
MessageErrorInterface::CODE_OUT_OF_STOCK;    // 'out_of_stock' — an enum member
MessageErrorInterface::SEVERITY_CRITICAL;    // 'critical'
```

`KEY_*` mirrors the JSON property name; every `enum` member and every `const` becomes a constant
prefixed with its property name.

## Type mapping

| JSON Schema | PHP | PHPDoc |
|---|---|---|
| `string` / `integer` / `number` / `boolean` | `string` / `int` / `float` / `bool` | same |
| `array` with `items` | `array` | `ItemInterface[]` |
| `array` with a `oneOf` item | `array` | `array<AInterface\|BInterface>` |
| `object` with `properties` | interface | `SomeInterface` |
| `object` that is a free-form map | `array` | `array<string, string>` |
| `$ref` to an object | interface FQN | same |
| `$ref` to a pure enum or scalar | the underlying scalar | same |
| `const` without `type` | inferred from the value | same |
| absent from `required` | `T\|null` | `T\|null` |

Types are named by their `$defs` key; inline objects are named after their parent and property
(`CheckoutSession.discounts` → `CheckoutSessionDiscountsInterface`).

## Versioning

SemVer, with one extra rule: **a new ACP spec target always means a new MAJOR.**

| Part | Bumped when |
|---|---|
| **MAJOR** | New spec target, or a breaking change to emitted interfaces |
| **MINOR** | New interfaces or members, nothing existing changed |
| **PATCH** | Generator fix — same spec target, no new API |

So `^1.0` means "built against ACP `2026-04-17`", and a generator bug is fixed as a patch that
consumers can take without thinking.

| Library | ACP spec target |
|---|---|
| `1.x` | `2026-04-17` |

The target lives in `composer.json` → `extra.acp.spec-target` and is copied into
`spec.manifest.json` by the generator. The release workflow fails if they disagree, or if the target
moved without a major bump.

## Regenerating

```bash
composer install

php generate.php --clean   # regenerate everything
php generate.php --check   # CI drift gate: fail if committed output is stale
```

`generate.php` exits non-zero on any of:

- a schema file that fails to load, resolve or compose;
- **integrity** — a type referenced by the emitted code but never emitted itself. Without this gate a
  missing interface only surfaces as a fatal error at class-link time in a consuming project;
- `--check` only: the fresh output differs from `generated/`, or `spec.manifest.json` is stale.

Name collisions and constants whose names collide within one interface are reported as warnings, not
failures. Neither occurs at the current spec target.

Output is deterministic — inputs are sorted before generation, so two runs over the same `spec/` are
byte-identical regardless of filesystem iteration order.

## Spec provenance (`spec.manifest.json`)

`spec/` is a verbatim copy of upstream's `spec/2026-04-17` directory at commit
`7fdd78df677a94dce04c770644b0fbbb1401272b`. The manifest records that commit plus a SHA-256 for
**every** vendored file — including the OpenAPI and OpenRPC documents, which the generator does not
read but which the HTTP surface depends on. `spec.generator_inputs` lists the subset that produced
`generated/`.

To move to a new spec release: re-copy `spec/`, update all four `extra.acp.upstream` fields and
`extra.acp.spec-target` in `composer.json`, run `php generate.php --clean`, and release a new MAJOR.

### Known upstream defect: `Item.quantity`

`Item` is `additionalProperties: false` and declares only `{id, name, unit_amount}`, yet the request
examples send a `quantity` alongside `id`. `CartCreateRequest`'s own example is
`{"line_items": [{"id": "item_123", "quantity": 2}]}`, and both `CheckoutSessionCreateRequest` and
`CartCreateRequest` type `line_items` as `Item`. An agent adding two of something has nowhere to put the
two. **Accept it leniently** until this is resolved upstream.

Note the distinction, because it is easy to get backwards: on the **response** side there is no defect —
`quantity` sits on `LineItem` beside `item`, which is correct, and no example nests it inside the `item`
wrapper. The contradiction is on the **request** side only.

A third inconsistency in the same area: `CheckoutSessionCreateRequest`'s example sends `items` with
`product_id`, while the schema says `line_items` with `Item.id`.

## Tests

```bash
vendor/bin/phpunit
```

The suite covers the naming scheme, cross-bundle composition, the value-versus-interface decision,
constant emission, the integrity gate and output determinism. It does not test the generated
interfaces themselves.

## Licensing

The generator and the generated PHP are MIT — see [LICENSE.md](LICENSE.md).

The vendored specification under `spec/` is **Apache-2.0**, © OpenAI and © Stripe. Its license and
notice are retained as `spec/UPSTREAM-LICENSE` and `spec/UPSTREAM-NOTICE`.

## Links

- **ACP specification**: [agenticcommerce.dev](https://www.agenticcommerce.dev/)
- **Upstream repository**: [agentic-commerce-protocol/agentic-commerce-protocol](https://github.com/agentic-commerce-protocol/agentic-commerce-protocol)
- **Generator**: built with [nette/php-generator](https://github.com/nette/php-generator)

---

![Magebit](https://github.com/user-attachments/assets/cdc904ce-e839-40a0-a86f-792f7ab7961f)

Magebit - Full-service e-commerce agency
[magebit.com](https://magebit.com)
