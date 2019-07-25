<?php
/**
 * Created by IntelliJ IDEA.
 * User: maksim
 * Date: 2019-07-25
 * Time: 16:19
 */

namespace Umirode\Notification\Example\Infrastructure\Transport;


use Umirode\Notification\Domain\Model\Notification;
use Umirode\Notification\Example\Application\Transport\EmailTransportInterface;
use Umirode\Notification\Example\Domain\Model\EmailNotification;

/**
 * Class EmptyEmailTransport
 *
 * @package Umirode\Notification\Example\Infrastructure\Transport
 */
final class EmptyEmailTransport implements EmailTransportInterface
{
    /**
     * @param Notification $notification
     *
     * @return bool
     */
    public function isSend(Notification $notification): bool
    {
        return $notification instanceof EmailNotification;
    }

    /**
     * @param Notification $notification
     */
    public function send(Notification $notification): void
    {

    }
}