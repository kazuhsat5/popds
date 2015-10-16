<?php

namespace Popds;

/**
 * オートローダクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Autoloader
{
    /**
     * __autorload()の実装を行う
     *
     * @param bool $prepend キューを先頭に追加(デフォルトでfalse)
     * @return void
     */
    public static function register($prepend = false)
    {
        spl_autoload_register(array(new self(), 'autoload'), true, $prepend);
    }

    /**
     * autoload関数(PSR-0準拠)
     *
     * @see http://www.php-fig.org/psr/psr-0/
     *
     * @param string $className クラス名
     * @return void
     */
    public function autoload($className)
    {
        $className = ltrim($className, '\\');
        $fileName  = '';
        $namespace = '';
        if ($lastNsPos = strrpos($className, '\\')) {
            $namespace = substr($className, 0, $lastNsPos);
            $className = substr($className, $lastNsPos + 1);
            $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }
        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

        require $fileName;
    }
}
