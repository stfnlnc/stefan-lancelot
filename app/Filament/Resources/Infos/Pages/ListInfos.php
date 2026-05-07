<?php

namespace App\Filament\Resources\Infos\Pages;

use App\Models\Info;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Infos\InfoResource;

class ListInfos extends ListRecords
{
    protected static string $resource = InfoResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function mount(): void
    {
        $record = Info::firstOrCreate([]);
        $this->redirect($this->getResource()::getUrl('edit', ['record' => $record->getKey()]));
    }
}
