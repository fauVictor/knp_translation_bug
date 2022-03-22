<?php

namespace App\Entity;

use App\Repository\VideoTranslationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VideoTranslationRepository::class)]
class VideoTranslation extends FileTranslation
{
    #[ORM\Column(type: 'string', length: 255)]
    private string $subject;
	
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }
}
