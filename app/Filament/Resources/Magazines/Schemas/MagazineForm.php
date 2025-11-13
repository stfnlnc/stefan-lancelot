<?php

namespace App\Filament\Resources\Magazines\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MagazineForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Titre'),
                TextInput::make('slug'),
                FileUpload::make('image'),
            ]);
    }
}
