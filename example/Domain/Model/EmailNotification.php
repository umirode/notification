<?php
/**
 * Created by IntelliJ IDEA.
 * User: maksim
 * Date: 2019-07-25
 * Time: 16:14
 */

namespace Umirode\Notification\Example\Domain\Model;

use Umirode\Notification\Domain\Model\Notification;

/**
 * Class EmailNotification
 *
 * @package Umirode\Notification\Example\Domain\Model
 */
abstract class EmailNotification extends Notification
{
    /**
     * @return array
     */
    abstract public function getEmails(): array;

    /**
     * @return string
     */
    abstract public function getTitle(): string;
}