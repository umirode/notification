<?php
/**
 * Created by IntelliJ IDEA.
 * User: maksim
 * Date: 2019-07-25
 * Time: 16:51
 */

namespace Umirode\Notification\Test\Example\Application\Service;


use PHPUnit\Framework\TestCase;
use Umirode\Notification\Application\Service\NotificationService;
use Umirode\Notification\Example\Application\Notification\SimpleEmailNotification;
use Umirode\Notification\Example\Infrastructure\Transport\EmptyEmailTransport;

/**
 * Class NotificationServiceTest
 *
 * @package Umirode\Notification\Test\Example\Application\Service
 */
final class NotificationServiceTest extends TestCase
{
    public function testConstructorWithoutParameters(): void
    {
        $notificationService = new NotificationService();

        $this->assertIsObject($notificationService);
        $this->assertInstanceOf(NotificationService::class, $notificationService);
    }

    public function testConstructorWithParameters(): void
    {
        $notificationService = new NotificationService([new EmptyEmailTransport()]);

        $this->assertIsObject($notificationService);
        $this->assertInstanceOf(NotificationService::class, $notificationService);
    }

    public function testSendWithTransportInConstructor(): void
    {
        $service = new NotificationService([new EmptyEmailTransport()]);
        $notification = new SimpleEmailNotification();

        $this->assertEquals(1, $service->sendNotification($notification));
    }

    public function testSendWithoutTransport(): void
    {
        $service = new NotificationService();
        $notification = new SimpleEmailNotification();

        $this->assertEquals(0, $service->sendNotification($notification));
    }

    public function testSend(): void
    {
        $service = new NotificationService();
        $notification = new SimpleEmailNotification();

        $service->addTransport(new EmptyEmailTransport());

        $this->assertEquals(1, $service->sendNotification($notification));
    }

    public function testSendMultipleNotifications(): void
    {
        $service = new NotificationService([new EmptyEmailTransport()]);
        $notification = new SimpleEmailNotification();

        $notifications = [
            $notification,
            $notification,
            $notification,
            $notification,
        ];

        $this->assertEquals(4, $service->sendNotification(...$notifications));
    }

    public function testAddTransport(): void
    {
        $service = new NotificationService();

        $this->assertEmpty($service->addTransport(new EmptyEmailTransport()));
    }

    public function testAddMultipleTransports(): void
    {
        $service = new NotificationService();

        $transport = new EmptyEmailTransport();
        $transports = [
            $transport,
            $transport,
            $transport,
            $transport,
        ];

        $this->assertEmpty($service->addTransport(...$transports));
    }
}
