Dynamic parameters problem reproduction
--------------------

```
composer install
export NETTE_TEST=foo
php test.php
```

Expectation:

```
string(7) "foo/foo"
```

Actual result:

```
NULL
```
