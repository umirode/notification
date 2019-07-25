<?php
/**
 * Created by IntelliJ IDEA.
 * User: maksim
 * Date: 2019-07-25
 * Time: 15:50
 */

namespace Umirode\Notification\Domain\Model;

/**
 * Class Notification
 *
 * @package Umirode\Notification\Domain\Model
 */
abstract class Notification
{
    /**
     * @return array
     */
    abstract public function getData(): array;
}