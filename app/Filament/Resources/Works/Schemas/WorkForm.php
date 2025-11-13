<?php

namespace App\Filament\Resources\Works\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;

class WorkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required(),
                TextInput::make('slug')->label('Slug')->required(),
                FileUpload::make('image')
                    ->disk('public_custom'),
                TagsInput::make('tags')
                    ->label('Tags')
                    ->required()
                    ->reorderable(),
                TextInput::make('url')->label('Url')->required(),
            ]);
    }
}
