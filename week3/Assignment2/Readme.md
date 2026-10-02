# PHP & MySQL: Chapter 3 Assignment (Arrays) Explained

This README explains each question, the concepts behind it, and how the solution works.

## Files

| File | Question |
|------|----------|
| [`Q1.php`](Q1.php) | One-dimensional array: totals, minimum, maximum |
| [`Q2.php`](Q2.php) | Two-dimensional associative array: colors |
| [`Q3.php`](Q3.php) | Two-dimensional associative array: students |

## Concepts Used

| Concept | Meaning |
|---------|---------|
| Indexed array | Array with numeric indexes starting at 0, created with `array()` |
| Associative array | Array with string keys, connected to values with `=>` |
| Two-dimensional array | An array that contains other arrays (rows and columns) |
| `foreach ... as` | Loop that visits every element of an array |
| `for` with `count()` | Loop that uses the index, where `count()` returns the number of elements |
| `min()` / `max()` | Return the lowest / highest value in an array |
| `%` (modulus) | Remainder after division, used to test even or odd |

---

## Question 1: One-Dimensional Array

### Task

Write PHP code that:

1. Declares a one-dimensional array with the values `(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9)`
2. Prints all elements
3. Calculates and prints the total of all elements
4. Calculates and prints the total of even elements
5. Calculates and prints the total of odd elements
6. Finds the minimum element and its positions
7. Finds the maximum element and its positions

### Explanation

**Steps 1-2: Declare and print.** The array is created with `array()`. A `foreach` loop visits each element and prints it.

```php
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

foreach ($numbers as $n)
    echo ("$n, ");
```

**Steps 3-5: Totals.** One `foreach` loop adds every element to `$total`. An element is even when `$n % 2 == 0`, so it is added to `$evenTotal`. Otherwise it is added to `$oddTotal`.

```php
foreach ($numbers as $n) {
    $total += $n;
    if ($n % 2 == 0)
        $evenTotal += $n;
    else
        $oddTotal += $n;
}
```

The even test uses `== 0` because `-7 % 2` gives `-1` in PHP, so checking `== 1` for odd would miss negative numbers.

**Steps 6-7: Minimum, maximum and positions.** `min()` and `max()` give the values. A `for` loop with `count()` then checks every index and prints the ones that match. Positions start at 0.

```php
$minimum = min($numbers);
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $minimum)
        echo ("$i, ");
}
```

### Output

```
Array elements are:
5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9,
Total of all elements is: 35
Total of even elements is: 30
Total of odd elements is: 5
Minimum element is: -7 at positions: 1, 4, 9,
Maximum element is: 12 at positions: 2, 7,
```

| Check | Calculation |
|-------|-------------|
| Even elements | 12 + 10 - 6 + 12 + 2 = 30 |
| Odd elements | 5 - 7 - 7 + 11 + 1 - 7 + 9 = 5 |
| Total | 30 + 5 = 35 |

---

## Question 2: Colors (Two-Dimensional Associative Array)

### Task

Declare a two-dimensional associative array.

- **Row names:** Light, Normal, Dark
- **Column names:** Red, Green, Blue

Print the elements as a table.

|        | Red | Green | Blue |
|--------|-----|-------|------|
| Light  | Light Red | Light Green | Light Blue |
| Normal | Normal Red | Normal Green | Normal Blue |
| Dark   | Dark Red | Dark Green | Dark Blue |

### Explanation

Each row is an array, and all the rows are placed inside one outer array. The `=>` operator connects each key to its value.

```php
$colors = array(
    "Light"  => array("Red" => "Light Red",  "Green" => "Light Green",  "Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
    "Dark"   => array("Red" => "Dark Red",   "Green" => "Dark Green",   "Blue" => "Dark Blue")
);
```

To print it:

1. The outer `foreach ($colors as $rowName => $row)` gives the row name and the row array.
2. The inner `foreach ($row as $k => $v)` prints each value in a `<td>` cell.
3. The header row (`Red`, `Green`, `Blue`) is printed once before the loop.

---

## Question 3: Students (Two-Dimensional Associative Array)

### Task

Declare a two-dimensional associative array.

- **Row names:** student IDs
- **Column names:** Name, Phone, Address

Print the elements as a table.

|       | Name | Phone | Address |
|-------|------|-------|---------|
| CA221 | Mohamed Ahmed Ali | 0648440403 | Laba Dhagax, Wardhiigley |
| CA223 | Ahmed Abdi Jama | 0647223201 | Taleex, Hodan |
| CA224 | Amina Nur Adan | 0646990276 | Macmacaanka, Dharkeynley |

> The assignment table repeats `CA221`. Array keys must be unique, so a repeated key would overwrite the first row. The third row uses `CA224`.

### Explanation

The structure is the same as Question 2. The student ID is the row key, and each row holds Name, Phone, and Address.

```php
$students = array(
    "CA221" => array("Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"),
    "CA223" => array("Name" => "Ahmed Abdi Jama",   "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
    "CA224" => array("Name" => "Amina Nur Adan",    "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley")
);
```

A nested `foreach` prints the table the same way as in Question 2.