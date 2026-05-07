<?php

namespace App\Filament\Resources\Infos\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class InfoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(1)
                    ->schema([
                        TextInput::make('email'),
                        TextInput::make('linkedin_url')
                            ->label('LinkedIn'),
                        TextInput::make('instagram_url')
                            ->label('Instagram'),
                        TextInput::make('github_url')
                            ->label('Github'),
                        TagsInput::make('tools')
                            ->label('Tools')
                            ->reorderable(),
                        FileUpload::make('picture_url')
                            ->label('Picture')
                            ->disk('public_custom'),
                    ])
            ]);
    }
}
