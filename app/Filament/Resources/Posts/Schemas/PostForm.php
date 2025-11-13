<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Titre'),
                TextInput::make('slug'),
                RichEditor::make('excerpt')
                    ->label('Extrait'),
                RichEditor::make('content')
                    ->label('Contenu'),
                TextInput::make('author')
                    ->label('Auteur'),
                FileUpload::make('image'),
                Toggle::make('is_published')
                    ->label('Publier'),
                Toggle::make('is_featured')
                    ->label('En avant'),
            ]);
    }
}
