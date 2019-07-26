<?php
/**
 * Created by IntelliJ IDEA.
 * User: maksim
 * Date: 2019-07-25
 * Time: 16:43
 */

namespace Umirode\Notification\Test\Example\Infrastucture\Transport;

use PHPUnit\Framework\TestCase;
use Umirode\Notification\Example\Application\Notification\SimpleEmailNotification;
use Umirode\Notification\Example\Infrastructure\Transport\EmptyEmailTransport;

/**
 * Class EmptyEmailTransportTest
 *
 * @package Umirode\Notification\Test\Example\Infrastucture\Transport
 */
final class EmptyEmailTransportTest extends TestCase
{
    public function testIsSend(): void
    {
        $transport = new EmptyEmailTransport();
        $notification = new SimpleEmailNotification();

        $this->assertTrue($transport->isSend($notification));
    }

    public function testSend(): void
    {
        $transport = new EmptyEmailTransport();
        $notification = new SimpleEmailNotification();

        $this->assertEmpty($transport->send($notification));
    }
}
