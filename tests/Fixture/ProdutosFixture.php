<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdutosFixture
 */
class ProdutosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'categorias_produto_id' => 1,
                'created' => '2022-06-21 18:29:36',
                'modified' => '2022-06-21 18:29:36',
            ],
        ];
        parent::init();
    }
}
