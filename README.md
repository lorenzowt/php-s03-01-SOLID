# PHP Sprint 3 — SOLID Principles (Exercises)

This repository contains a set of small, focused PHP exercises that demonstrate the SOLID design principles. Each exercise is self-contained and includes a simple `index.php` runner plus a `classes/` folder with the example classes.

## How the exercises are organized

- level-1: Single Responsibility & Dependency Inversion examples
- level-2: Open/Closed and Interface Segregation examples
- level-3-liskov-principle: Liskov Substitution Principle examples

Directory layout (top-level):

- `level-1/` — exercises for single responsibility and dependency inversion
- `level-2/` — exercises for open-closed and interface segregation
- `level-3-liskov-principle/` — Liskov substitution examples

Each exercise folder contains an `index.php` file (entry point) and a `classes/` directory with the sample classes.

## Running the exercises (using XAMPP)

1. Ensure XAMPP (Apache + PHP) is running.
2. Open a browser and navigate to the exercise `index.php` you want to run. Example URL (adjust if your document root differs):

`http://localhost/php-full-stack/php-sprint-3/php-s03-01-SOLID/level-1/ex-01-single-responsibility/index.php`

Replace the path portion after `php-s03-01-SOLID/` to open other exercises (e.g., `level-2/ex-01-open-closed-principle/index.php`).

Alternatively, from the repository root you can run the built-in PHP server for quick testing:

```
php -S localhost:8000 -t .
```

Then open `http://localhost:8000/level-1/ex-01-single-responsibility/index.php` in your browser.

## Notes for contributors

- Exercises are intentionally small and focused; changes should keep each example simple and clear.
- Class implementations live under each exercise's `classes/` directory.
- If you add new exercises, follow the existing folder pattern: `level-N/ex-XX-description/` with an `index.php` and `classes/`.

## License

Feel free to use these examples for learning and teaching. No license specified.
