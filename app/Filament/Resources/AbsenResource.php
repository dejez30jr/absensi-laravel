<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbsenResource\Pages;
use App\Filament\Resources\AbsenResource\RelationManagers;
use App\Models\Absen;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbsenResource extends Resource
{
    protected static ?string $model = Absen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // hidden button create
    public static function canCreate():bool{
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                Select::make('kelas')
                ->options([
                    'XII RPL 2' => 'XII RPL 2',
                    'XII RPL 1' => 'XII RPL 1',
                ]),
                Select::make('status')
                ->options([
                    'hadir' => 'hadir',
                    'sakit' => 'sakit',
                    'izin' => 'izin',
                    'alpa' => 'alpa',
                ]),
                Textarea::make('pesan'),
                FileUpload::make('gambar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('gambar'),
                TextColumn::make('name')->searchable(),
                TextColumn::make('kelas'),
                TextColumn::make('status'),
                TextColumn::make('pesan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAbsens::route('/'),
            'create' => Pages\CreateAbsen::route('/create'),
            'edit' => Pages\EditAbsen::route('/{record}/edit'),
        ];
    }
    
}
