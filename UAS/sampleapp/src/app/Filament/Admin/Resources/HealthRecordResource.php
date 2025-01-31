<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\HealthRecordResource\Pages;
use App\Models\HealthRecord;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HealthRecordResource extends Resource
{
    protected static ?string $model = HealthRecord::class;
    protected static ?string $navigationIcon = 'heroicon-o-heart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('athlete_id')
                    ->relationship('athlete', 'name')
                    ->required(),
                Forms\Components\TextInput::make('blood_pressure')
                    ->label('Blood Pressure')
                    ->required(),
                Forms\Components\TextInput::make('heart_rate')
                    ->label('Heart Rate')
                    ->numeric()
                    ->required(),
                Forms\Components\Textarea::make('injury_history')
                    ->label('Injury History')
                    ->nullable(),
                Forms\Components\Textarea::make('recovery_plan')
                    ->label('Recovery Plan')
                    ->nullable(),
                Forms\Components\Textarea::make('nutrition_plan')
                    ->label('Nutrition Plan')
                    ->nullable(),
                Forms\Components\DatePicker::make('checkup_date')
                    ->label('Checkup Date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('athlete.name')
                    ->label('Athlete Name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('blood_pressure')
                    ->label('Blood Pressure'),
                Tables\Columns\TextColumn::make('heart_rate')
                    ->label('Heart Rate'),
                Tables\Columns\TextColumn::make('injury_history')
                    ->label('Injury History')
                    ->limit(20),
                Tables\Columns\TextColumn::make('checkup_date')
                    ->label('Checkup Date')
                    ->date(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHealthRecords::route('/'),
            'create' => Pages\CreateHealthRecord::route('/create'),
            'edit' => Pages\EditHealthRecord::route('/{record}/edit'),
        ];
    }
}
