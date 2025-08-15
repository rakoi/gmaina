<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingsResource\Pages;
use App\Filament\Resources\SiteSettingsResource\RelationManagers;
use App\Models\SiteSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ToggleColumn;

class SiteSettingsResource extends Resource
{
    protected static ?string $model = SiteSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
      protected static ?string $navigationGroup='Site Management';

    public static function form(Form $form): Form
    {
        return $form
             ->schema([
                         Card::make()->schema([
                               TextInput::make('sitename')->required(),
                               TextInput::make('email')->required(),
                               TextInput::make('telephone')->required(),
                               FileUpload::make('aboutimage')->maxSize(512000),
                               RichEditor::make('aboutus')->required()

                          ])

                       ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                                   TextColumn::make('id'),
                                   TextColumn::make('sitename')->searchable(),
                                   TextColumn::make('email')->searchable(),
                                    ToggleColumn::make('telephone')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSettings::route('/create'),
            'edit' => Pages\EditSiteSettings::route('/{record}/edit'),
        ];
    }
}
