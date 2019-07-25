<?php
/**
 * Created by IntelliJ IDEA.
 * User: maksim
 * Date: 2019-07-25
 * Time: 16:24
 */

namespace Umirode\Notification\Example\Application\Notification;


use Umirode\Notification\Example\Domain\Model\EmailNotification;

/**
 * Class SimpleEmailNotification
 *
 * @package Umirode\Notification\Example\Application\Notification
 */
final class SimpleEmailNotification extends EmailNotification
{
    /**
     * @return array
     */
    public function getEmails(): array
    {
        return [];
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return '';
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [];
    }
}