<?php

namespace Faker\Test\Provider\id_ID;

use Faker\Generator;
use Faker\Provider\id_ID\Company;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testIfCompanyCanReturnData()
    {
        $company = $this->faker->company();
        $this->assertNotEmpty($company);
    }

    public function testIfCompanyPrefixCanReturnData()
    {
        $companyPrefix = $this->faker->companyPrefix();
        $this->assertNotEmpty($companyPrefix);
    }

    public function testIfCompanySuffixCanReturnData()
    {
        $companySuffix = $this->faker->companySuffix();
        $this->assertNotEmpty($companySuffix);
    }

    public function testIfBusinessCanReturnData()
    {
        $business = $this->faker->business();
        $this->assertNotEmpty($business);
    }
}
