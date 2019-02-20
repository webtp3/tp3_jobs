<?php

/*
 * This file is part of the web-tp3/tp3_jobs.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Tp3\Tp3Jobs\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 */
class CompanyTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Tp3\Tp3Jobs\Domain\Model\Company
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Tp3\Tp3Jobs\Domain\Model\Company();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
