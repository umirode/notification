<?php
/**
 * Created by IntelliJ IDEA.
 * User: maksim
 * Date: 2019-07-25
 * Time: 15:53
 */

namespace Umirode\Notification\Domain\Transport;

use Umirode\Notification\Domain\Model\Notification;

/**
 * Interface TransportInterface
 *
 * @package Umirode\Notification\Domain\Transport
 */
interface TransportInterface
{
    /**\
     * @param Notification $notification
     *
     * @return bool
     */
    public function isSend(Notification $notification): bool;

    /**
     * @param Notification $notification
     */
    public function send(Notification $notification): void;
}