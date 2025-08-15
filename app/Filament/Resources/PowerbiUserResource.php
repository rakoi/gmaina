<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PowerbiUserResource\Pages;
use App\Filament\Resources\PowerbiUserResource\RelationManagers;
use App\Models\PowerbiUser;
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

class PowerbiUserResource extends Resource
{
    protected static ?string $model = PowerbiUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationGroup='Report';

    public static function form(Form $form): Form
    {
         return $form
                   ->schema([
                     Card::make()->schema([
                            TextInput::make('username')->required(),
                            TextInput::make('password')->required(),
                            TextInput::make('client_id')->required(),

                           Toggle::make('isActive')
                      ])

                   ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
             TextColumn::make('id'),
             TextColumn::make('username')->searchable(),
             TextColumn::make('password')->searchable(),
              TextColumn::make('client_id')->searchable(),
             ToggleColumn::make('isActive'),

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
            'index' => Pages\ListPowerbiUsers::route('/'),
            'create' => Pages\CreatePowerbiUser::route('/create'),
            'edit' => Pages\EditPowerbiUser::route('/{record}/edit'),
        ];
    }
}
