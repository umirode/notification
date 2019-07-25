<?php
/**
 * Created by IntelliJ IDEA.
 * User: maksim
 * Date: 2019-07-25
 * Time: 16:00
 */

namespace Umirode\Notification\Application\Service;


use Umirode\Notification\Domain\Transport\TransportInterface;
use Umirode\Notification\Domain\Model\Notification;
use Umirode\Notification\Domain\Service\NotificationServiceInterface;

/**
 * Class NotificationService
 *
 * @package Umirode\Notification\Application\Service
 */
final class NotificationService implements NotificationServiceInterface
{
    /**
     * @var TransportInterface[]
     */
    private $transports;

    /**
     * NotificationService constructor.
     *
     * @param TransportInterface[] $transports
     */
    public function __construct(array $transports = [])
    {
        $this->transports = $transports;
    }

    /**
     * @param TransportInterface ...$transports
     */
    public function addTransport(TransportInterface ...$transports): void
    {
        foreach ($transports as $transport) {
            if (!in_array($transport, $this->transports, true)) {
                $this->transports [] = $transport;
            }
        }
    }

    /**
     * @param Notification ...$notifications
     *
     * @return int
     */
    public function sendNotification(Notification ...$notifications): int
    {
        $count = 0;

        foreach ($notifications as $notification) {
            foreach ($this->transports as $transport) {
                if ($transport->isSend($notification)) {
                    $transport->send($notification);
                    $count++;
                }
            }
        }

        return $count;
    }
}