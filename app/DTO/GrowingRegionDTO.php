<?php

namespace App\DTO;

use Illuminate\Http\UploadedFile;

class GrowingRegionDTO
{
     private function __construct(public string $title, public string $slug, public string $subtitle, public string $description, public ?string $characteristics,
                                  public string $tastingNote, public UploadedFile|string|null $heroImage, public UploadedFile|string|null $heroImageSub,
                                  public bool   $isActive, public ?array $growingRegionGalleries, public array $teams){

     }
     public static function fromArray(array $input) : GrowingRegionDTO
     {
          return new self(
               title: $input['title'],
               slug: $input['slug'],
               subtitle: $input['subtitle'],
               description: $input['description'],
               characteristics: $input['characteristics'] ?? null,
               tastingNote: $input['tasting_note'] ?? null,
               heroImage: $input['hero_image'] ?? null,
               heroImageSub: $input['hero_image_sub'] ?? null,
               isActive: $input['is_active'] ?? false,
               growingRegionGalleries: $input['galleries'] ?? [],
               teams: TeamDTO::fromArray($input['teams_repeater'] ?? [])
          );
     }

     public function toArray() : array
     {
          return [
               'title'           => $this->title,
               'slug'            => $this->slug,
               'subtitle'        => $this->subtitle,
               'description'     => $this->description,
               'characteristics' => $this->characteristics,
               'tasting_note'    => $this->tastingNote,
               'hero_image'      => $this->heroImage,
               'hero_image_sub'  => $this->heroImageSub,
               'is_active'       => $this->isActive,
          ];
     }
}