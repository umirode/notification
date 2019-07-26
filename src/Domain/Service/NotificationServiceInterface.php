<?php
/**
 * Created by IntelliJ IDEA.
 * User: maksim
 * Date: 2019-07-25
 * Time: 15:50
 */

namespace Umirode\Notification\Domain\Service;

use Umirode\Notification\Domain\Transport\TransportInterface;
use Umirode\Notification\Domain\Model\Notification;

/**
 * Interface NotificationServiceInterface
 *
 * @package Umirode\Notification\Domain\Service
 */
interface NotificationServiceInterface
{
    /**
     * @param TransportInterface ...$transports
     */
    public function addTransport(TransportInterface ...$transports): void;

    /**
     * @param Notification ...$notifications
     *
     * @return int
     */
    public function sendNotification(Notification ...$notifications): int ;
}
