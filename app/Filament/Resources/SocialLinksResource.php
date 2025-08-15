<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialLinksResource\Pages;
use App\Filament\Resources\SocialLinksResource\RelationManagers;
use App\Models\SocialLinks;
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

class SocialLinksResource extends Resource
{
    protected static ?string $model = SocialLinks::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup='Site Management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                  Card::make()->schema([
                                   TextInput::make('name')->required(),
                                   TextInput::make('link')->required(),
                                   TextInput::make('icon')->required(),
                              ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    TextColumn::make('name'),
                                  TextColumn::make('link')->searchable(),
                                   TextColumn::make('icon')->searchable(),
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
            'index' => Pages\ListSocialLinks::route('/'),
            'create' => Pages\CreateSocialLinks::route('/create'),
            'edit' => Pages\EditSocialLinks::route('/{record}/edit'),
        ];
    }
}
