<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductsImport implements
    ToModel,
    SkipsOnError,
    WithBatchInserts,
    WithHeadingRow,
    SkipsOnFailure,
    WithChunkReading,
    WithValidation

{
    use Importable, SkipsFailures, SkipsErrors;

    private $successfulRows = 0;

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        $this->successfulRows++;
        $category = Category::where('code', $row['category_code'])->first();

        return new Product([
            'category_id' => $category->id,
            'name' => $row['product_name_ru'],
            'name_en' => $row['product_name_en'],
            'code' => $row['code'],
            'description' => $row['description_ru'],
            'description_en' => $row['description_en'],
            'image' => $row['image'],
            'price' => $row['price'],
            'hit' => ($row['hit'] == '1') ? 'on' : 0,
            'new' => ($row['new'] == '1') ? 'on' : 0,
            'count' => $row['count'],
        ]);
    }

    public function rules(): array
    {
        return [
            '*.category_code' => 'required',
            '*.product_name_ru' => 'required',
            '*.product_name_en' => 'required',
            '*.code' => 'required|unique:products,code',
            '*.price' => 'required|numeric',
            '*.hit' => Rule::in([1,0,'']),
            '*.new' => Rule::in([1,0,'']),
            '*.count' => 'required|numeric',
        ];
    }

    public function chunkSize(): int
    {
        return 5;
    }

    /**
     * @return int
     */
    public function batchSize(): int
    {
        return 5;
    }

    /**
     * @return string|array
     */
    public function uniqueBy()
    {
        return ['category_code', 'code'];
    }

    public function getSuccessfulRowCount(): int
    {
        return $this->successfulRows;
    }
}
