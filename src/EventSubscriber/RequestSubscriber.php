<?php

declare(strict_types=1);

namespace Tdc\LanguageSwitcherBundle\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Translation\LocaleSwitcher;

readonly class RequestSubscriber implements EventSubscriberInterface
{
    public function __construct(private LocaleSwitcher $localeSwitcher)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 0],
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        $locale = $event->getRequest()->getSession()->get('_locale', 'de');
        $this->localeSwitcher->setLocale($locale);
    }
}
