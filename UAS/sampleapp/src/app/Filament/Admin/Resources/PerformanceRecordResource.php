<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PerformanceRecordResource\Pages;
use App\Models\PerformanceRecord;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PerformanceRecordResource extends Resource
{
    protected static ?string $model = PerformanceRecord::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('athlete_id')
                    ->relationship('athlete', 'name')
                    ->required(),
                Forms\Components\DatePicker::make('record_date')->required(),
                Forms\Components\TextInput::make('swimming_style')->required(),
                Forms\Components\TextInput::make('distance')->numeric()->required(),
                Forms\Components\TextInput::make('time_result')->required(),
                Forms\Components\TextInput::make('heart_rate')->numeric()->required(),
                Forms\Components\TextInput::make('vo2_max')->numeric()->required(),
                Forms\Components\Textarea::make('coach_notes'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('athlete.name')->label('Athlete'),
                Tables\Columns\TextColumn::make('record_date')->date(),
                Tables\Columns\TextColumn::make('swimming_style'),
                Tables\Columns\TextColumn::make('distance')->suffix(' m'),
                Tables\Columns\TextColumn::make('time_result'),
                Tables\Columns\TextColumn::make('heart_rate')->suffix(' bpm'),
                Tables\Columns\TextColumn::make('vo2_max'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPerformanceRecords::route('/'),
            'create' => Pages\CreatePerformanceRecord::route('/create'),
            'edit' => Pages\EditPerformanceRecord::route('/{record}/edit'),
        ];
    }
}
