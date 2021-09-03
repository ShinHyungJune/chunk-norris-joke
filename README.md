# Chunk Norris Jokes

Chunk Norris Jokes is joke generator.

## Installation

Require the package using composer:

```bash
composer require june/chunk-norris-jokes
```

## Usage

```php
Route::get('/', function () {
    $jokes = new \June\ChunkNorrisJokes\JokeFactory(["test", "test2"]);

    return view('welcome', [
        "joke" => $jokes->getRandomJoke()
    ]);
});
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md/)
