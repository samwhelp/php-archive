# ex_002

## test php-archive

### list zip file

run

``` sh
$ ./lszip.php
```

or

``` sh
$ php lszip.php
```

or

``` sh
$ ./szip.php | less
```

or

``` sh
$ php lszip.php | less
```

## extract zip file

run

``` sh
$ ./unzip.php
```

or

``` sh
$ php unzip.php
```

then

``` sh
$ tree tmp/ex
```

## test unzip

### list zip file

run (not expect)

``` sh
$ unzip -l ex.zip
```

run (not expect)

``` sh
$ unzip -O big5 -l ex.zip
```

### extract zip file

run (not expect)

``` sh
$ unzip ex.zip
```

run (not expect)

``` sh
$ unzip -O big5 ex.zip
```
