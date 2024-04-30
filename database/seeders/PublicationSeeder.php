<?php
declare(strict_types = 1);

namespace Database\Seeders;

use App\Enums\PublicationType;
use App\Models\Publication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publication::query()->insert([
             [
                  'name'      => '2018 Financial Report',
                  'type'      => PublicationType::ANNUAL_REPORT->value,
                  'file_name' => '2018-financial-report.pdf',
                  'file_url'  => 'publication/2018-financial-report.pdf'
             ],
             [
                  'name'      => '2019 Financial Report',
                  'type'      => PublicationType::ANNUAL_REPORT->value,
                  'file_name' => '2019-financial-report.pdf',
                  'file_url'  => 'publication/2019-financial-report.pdf'
             ],
             [
                  'name'      => '2020 Financial Report',
                  'type'      => PublicationType::ANNUAL_REPORT->value,
                  'file_name' => '2020-financial-report.pdf',
                  'file_url'  => 'publication/2020-financial-report.pdf'
             ],
             [
                  'name'      => '2021 Financial Report',
                  'type'      => PublicationType::ANNUAL_REPORT->value,
                  'file_name' => '2021-financial-report.pdf',
                  'file_url'  => 'publication/2021-financial-report.pdf'
             ],
             [
                  'name'      => '2022 Financial Report',
                  'type'      => PublicationType::ANNUAL_REPORT->value,
                  'file_name' => '2022-financial-report.pdf',
                  'file_url'  => 'publication/2022-financial-report.pdf'
             ],
             [
                  'name'      => '2023 Financial Report',
                  'type'      => PublicationType::ANNUAL_REPORT->value,
                  'file_name' => '2023-financial-report.pdf',
                  'file_url'  => 'publication/2023-financial-report.pdf'
             ],
             [
                  'name'      => 'Autumn 2020',
                  'type'      => PublicationType::COMPANY_UPDATE->value,
                  'file_name' => '2020-autumn.pdf',
                  'file_url'  => 'publication/2020-autumn.pdf'
             ],
             [
                  'name'      => 'Summer 2021',
                  'type'      => PublicationType::COMPANY_UPDATE->value,
                  'file_name' => '2021-summer.pdf',
                  'file_url'  => 'publication/2021-summer.pdf'
             ],
             [
                  'name'      => 'Winter 2021',
                  'type'      => PublicationType::COMPANY_UPDATE->value,
                  'file_name' => '2021-winter.pdf',
                  'file_url'  => 'publication/2021-winter.pdf'
             ],
             [
                  'name'      => 'Summer 2022',
                  'type'      => PublicationType::COMPANY_UPDATE->value,
                  'file_name' => '2022-summer.pdf',
                  'file_url'  => 'publication/2022-summer.pdf'
             ],
             [
                  'name'      => 'Winter 2022',
                  'type'      => PublicationType::COMPANY_UPDATE->value,
                  'file_name' => '2022-winter.pdf',
                  'file_url'  => 'publication/2022-winter.pdf'
             ],
             [
                  'name'      => 'Autumn 2023',
                  'type'      => PublicationType::COMPANY_UPDATE->value,
                  'file_name' => '2023-autumn.pdf',
                  'file_url'  => 'publication/2023-autumn.pdf'
             ],
             [
                  'name'      => 'Autumn 2024',
                  'type'      => PublicationType::COMPANY_UPDATE->value,
                  'file_name' => '2024-autumn.pdf',
                  'file_url'  => 'publication/2024-autumn.pdf'
             ],
             [
                  'name'      => 'Privacy Policy',
                  'type'      => PublicationType::POLICY_AND_PROCEDURE->value,
                  'file_name' => 'privacy-policy.pdf',
                  'file_url'  => 'publication/privacy-policy.pdf'
             ],
             [
                  'name'      => 'Privacy Statement',
                  'type'      => PublicationType::POLICY_AND_PROCEDURE->value,
                  'file_name' => 'privacy-statement.pdf',
                  'file_url'  => 'publication/privacy-statement.pdf'
             ],
             [
                  'name'      => 'Terms & Conditions of Trade',
                  'type'      => PublicationType::POLICY_AND_PROCEDURE->value,
                  'file_name' => 'terms-and-conditions.pdf',
                  'file_url'  => 'publication/terms-and-conditions.pdf'
             ],
        ]);
    }
}
