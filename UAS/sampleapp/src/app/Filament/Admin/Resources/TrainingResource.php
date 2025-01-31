<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TrainingResource\Pages;
use App\Models\Training;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TrainingResource extends Resource
{
    protected static ?string $model = Training::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('athlete_id')
                    ->relationship('athlete', 'name')
                    ->required(),
                Forms\Components\DatePicker::make('training_date')->required(),
                Forms\Components\Select::make('training_level')
                    ->options([
                        'Beginner' => 'Beginner',
                        'Intermediate' => 'Intermediate',
                        'Advanced' => 'Advanced',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('training_type')->required(),
                Forms\Components\TextInput::make('duration')
                    ->numeric()
                    ->suffix(' menit')
                    ->required(),
                Forms\Components\Textarea::make('coach_notes'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('athlete.name')->label('Athlete'),
                Tables\Columns\TextColumn::make('training_date')->date(),
                Tables\Columns\TextColumn::make('training_level'),
                Tables\Columns\TextColumn::make('training_type'),
                Tables\Columns\TextColumn::make('duration')->suffix(' menit'),
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
            'index' => Pages\ListTrainings::route('/'),
            'create' => Pages\CreateTraining::route('/create'),
            'edit' => Pages\EditTraining::route('/{record}/edit'),
        ];
    }
}
