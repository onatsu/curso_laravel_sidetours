# FizzBuzz Kata

English | [Español](#kata-fizzbuzz)

Source: https://kata-log.rocks/fizz-buzz-kata

## Rules

1. Print one line for each number from 1 to 100.
2. By default, print the number itself.
3. For multiples of three, print `Fizz` instead of the number.
4. For multiples of five, print `Buzz` instead of the number.
5. For multiples of both three and five, print `FizzBuzz` instead of the number.

## Extra rules

### Christmas

From December 24th to December 26th, both included, the words change:

| Multiple of | Word      |
|-------------|-----------|
| 3           | `Kuksa!`  |
| 5           | `Sauna!`  |
| 3 and 5     | `Dip!`    |

### Notification

Every time a number is a multiple of both three and five (a `FizzBuzz`, or `Dip!` during Christmas), a notification must be sent.

## Running the tests

```bash
make build
make install
make test
```

## Architecture

The code follows a hexagonal structure under `src/`:

- `Domain`: business rules.
- `Application/Port/In`: use cases.
- `Application/Port/Out`: required collaborators such as the clock and the notifier.
- `Infrastructure/Adapter/In` and `Infrastructure/Adapter/Out`: driving and driven adapters.

---

# Kata FizzBuzz

[English](#fizzbuzz-kata) | Español

Fuente: https://kata-log.rocks/fizz-buzz-kata

## Reglas

1. Imprime una línea por cada número del 1 al 100.
2. Por defecto, imprime el propio número.
3. Para los múltiplos de tres, imprime `Fizz` en lugar del número.
4. Para los múltiplos de cinco, imprime `Buzz` en lugar del número.
5. Para los múltiplos de tres y de cinco a la vez, imprime `FizzBuzz` en lugar del número.

## Reglas adicionales

### Navidad

Del 24 al 26 de diciembre, ambos incluidos, las palabras cambian:

| Múltiplo de | Palabra   |
|-------------|-----------|
| 3           | `Kuksa!`  |
| 5           | `Sauna!`  |
| 3 y 5       | `Dip!`    |

### Notificación

Cada vez que un número es múltiplo de tres y de cinco a la vez (un `FizzBuzz`, o `Dip!` en Navidad), se debe enviar una notificación.

## Ejecutar los tests

```bash
make build
make install
make test
```

## Arquitectura

El código sigue una estructura hexagonal dentro de `src/`:

- `Domain`: reglas de negocio.
- `Application/Port/In`: casos de uso.
- `Application/Port/Out`: colaboradores necesarios, como el reloj y el notificador.
- `Infrastructure/Adapter/In` y `Infrastructure/Adapter/Out`: adaptadores de entrada y de salida.
