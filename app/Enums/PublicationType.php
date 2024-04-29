<?php
declare(strict_types = 1);
namespace App\Enums;

enum PublicationType: string
{
     case ANNUAL_REPORT        = 'annual-report';
     case COMPANY_UPDATE       = 'company-update';
     case POLICY_AND_PROCEDURE = 'policy-and-procedure';

     public static function values(): array
     {
          return array_column(self::cases(), 'value');
     }

}
