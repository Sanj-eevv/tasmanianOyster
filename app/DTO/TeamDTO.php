<?php

namespace App\DTO;

use Illuminate\Http\UploadedFile;

class TeamDTO
{
     public function __construct(public string $teamName, public string $teamRole, public ?UploadedFile $teamImage, public string|int|null $teamId = null){

     }
     public static function fromArray(array $teamRepeater) : array
     {
          return array_map(function(array $el){
                    return new self(teamName: $el['team_name'], teamRole: $el['team_role'], teamImage: $el['team_image'] ?? null, teamId: $el['team_id'] ?? null);
          },$teamRepeater);
     }
}