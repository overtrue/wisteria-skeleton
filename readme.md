<p align="center"><img src="https://user-images.githubusercontent.com/1472352/54765401-694a5400-4c34-11e9-9f08-4d05d4629367.png" height="60" /></p>

<p align="center"> The skeleton of <a href="https://github.com/overtrue/wisteria">Wisteria</a>.</p>


## Usage

### Installation

```bash
$ composer create-project overtrue/wisteria-skeleton wisteria-demo -vvv
```

Update config file `config/wisteria.php` with right repository url of your docs, Then init the docs files:

```bash
$ php artisan wisteria:refresh
```

Done. 

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/overtrue/wisteria/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/overtrue/wisteria/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## PHP 扩展包开发

> 想知道如何从零开始构建 PHP 扩展包？
>
> 请关注我的实战课程，我会在此课程中分享一些扩展开发经验 —— [《PHP 扩展包实战教程 - 从入门到发布》](https://learnku.com/courses/creating-package)

## License

MIT
