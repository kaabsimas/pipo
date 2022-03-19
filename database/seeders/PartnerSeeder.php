<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::insert([
            [
                'title' => 'Plano de saúde Norte Europa',
                'subscription_form_schema' => json_encode([
                    'nome' => ['type' => 'text', 'label' => 'Nome'],
                    'cpf' => ['type' => 'number', 'label' => 'CPF', 'mask' => '###.###.###-##'],
                    'admissao' => ['type' => 'date', 'label' => 'Data de Admissão', 'mask' => '##/##/####'],
                    'email' => ['type' => 'email', 'label' => 'E-Mail']
                ]),
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'title' => 'Plano de saúde Pampulha Intermédica',
                'subscription_form_schema' => json_encode([
                    'nome' => ['type' => 'text', 'label' => 'nome'],
                    'cpf' => ['type' => 'number', 'label' => 'CPF', 'mask' => '###.###.###-##'],
                    'admissao' => ['type' => 'date', 'label' => 'Data de Admissão', 'mask' => '##/##/####'],
                    'endereco' => ['type' => 'text', 'label' => 'Endereço']
                ]),
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'title' => 'Plano odontológico Dental Sorriso',
                'subscription_form_schema' => json_encode([
                    'nome' => ['type' => 'text', 'label' => 'nome'],
                    'cpf' => ['type' => 'number', 'label' => 'CPF', 'mask' => '###.###.###-##'],
                    'peso' => ['type' => 'number', 'label' => 'Peso(Kg)'],
                    'altura' => ['type' => 'number', 'label' => 'Altura(cm)']
                ]),
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'title' => 'Plano de saúde mental Mente Sã, Corpo São',
                'subscription_form_schema' => json_encode([
                    'cpf' => ['type' => 'number', 'label' => 'CPF', 'mask' => '###.###.###-##'],
                    'horas' => ['type' => 'number', 'label' => 'Horas meditadas nos últimos 7 dias']
                ]),
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ]
        ]);
    }
}
