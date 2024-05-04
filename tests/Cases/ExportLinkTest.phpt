<?php declare(strict_types = 1);

namespace Contributte\Datagrid\Tests\Cases;

require __DIR__ . '/../bootstrap.php';

use Contributte\Datagrid\Tests\Files\TestingDatagridFactory;
use Nette\Application\AbortException;
use Tester\Assert;
use Tester\TestCase;

final class ExportLinkTest extends TestCase
{

	public function testExportLink(): void
	{
		$factory = new TestingDatagridFactory();
		$datagrid = $factory->createTestingDatagrid('ExportTesting');
		$datagrid->setDataSource([]);

		Assert::exception(function () use ($datagrid): void {
			$datagrid->handleExport(1);
		}, AbortException::class);
	}

}

(new ExportLinkTest())->run();
