<?php

namespace App\Services;

use App\Entity\Settings;
use App\Entity\SocialMedia;
use Doctrine\ORM\EntityManagerInterface;

class SettingsLoader
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function load(): array
    {
        $setting = $this->entityManager->find(Settings::class, 1);
        $facebook_link = $this->entityManager->getRepository(SocialMedia::class)->findOneBy(['platform' => 'facebook']);
        $instagram_link = $this->entityManager->getRepository(SocialMedia::class)->findOneBy(['platform' => 'instagram']);
        $twitter_link = $this->entityManager->getRepository(SocialMedia::class)->findOneBy(['platform' => 'twitter']);

        return [
            'mobile_logo' => $setting->getMobileLogo(), 'desktop_logo' => $setting->getDesktopLogo(),
            'facebook_link' => $facebook_link, 'instagram_link' => $instagram_link, 'twitter_link' => $twitter_link,
            'copyright' => $setting->getCopyright()
        ];
    }
}

