<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AthleteResource\Pages;
use App\Models\Athlete;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput\NumericInput;

class AthleteResource extends Resource
{
    protected static ?string $model = Athlete::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Athletes';
    protected static ?string $slug = 'athletes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255),

                TextInput::make('age')
                    ->label('Usia')
                    ->required()
                    ->numeric(),

                TextInput::make('height')
                    ->label('Tinggi (cm)')
                    ->required()
                    ->numeric(),

                TextInput::make('weight')
                    ->label('Berat (kg)')
                    ->required()
                    ->numeric(),

                Select::make('training_level')
                    ->label('Level Latihan')
                    ->options([
                        'Beginner' => 'Beginner',
                        'Intermediate' => 'Intermediate',
                        'Advanced' => 'Advanced',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('age')
                    ->label('Usia')
                    ->sortable(),

                TextColumn::make('height')
                    ->label('Tinggi (cm)')
                    ->sortable(),

                TextColumn::make('weight')
                    ->label('Berat (kg)')
                    ->sortable(),

                TextColumn::make('training_level')
                    ->label('Level Latihan')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAthletes::route('/'),
            'create' => Pages\CreateAthlete::route('/create'),
            'edit' => Pages\EditAthlete::route('/{record}/edit'),
        ];
    }
}
