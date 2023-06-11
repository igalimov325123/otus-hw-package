# Math-package

Пакет для простейших математических вычислений

## Требования

- PHP 7.4

## Установка

```bash
$ composer reuire igalimov325123/otus-hw-package
```

## Использование

#### Подключение 
```php
<php
$mathService = new MathService();
```

#### Сумма двух чисел 
```php
<php
echo $mathService->sum(3, 5);
```

#### Возведение в степень, параметр 1 - число, параметр 2 - степень
```php
<php
echo $mathService->pow(1, 2);
```