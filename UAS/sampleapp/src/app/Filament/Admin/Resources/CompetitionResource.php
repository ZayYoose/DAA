<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CompetitionResource\Pages;
use App\Models\Competition;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class CompetitionResource extends Resource
{
    protected static ?string $model = Competition::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';
    protected static ?string $navigationLabel = 'Competitions';
    protected static ?string $slug = 'competitions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Kejuaraan')
                    ->required()
                    ->maxLength(255),

                TextInput::make('location')
                    ->label('Lokasi')
                    ->required(),

                DatePicker::make('date')
                    ->label('Tanggal')
                    ->required(),

                Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'Regional' => 'Regional',
                        'Nasional' => 'Nasional',
                        'Internasional' => 'Internasional',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Kejuaraan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('location')
                    ->label('Lokasi')
                    ->sortable(),

                TextColumn::make('date')
                    ->label('Tanggal')
                    ->sortable()
                    ->date(),

                TextColumn::make('category')
                    ->label('Kategori')
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
            'index' => Pages\ListCompetitions::route('/'),
            'create' => Pages\CreateCompetition::route('/create'),
            'edit' => Pages\EditCompetition::route('/{record}/edit'),
        ];
    }
}
