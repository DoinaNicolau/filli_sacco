<x-layout> 
 
     <div class="equipment-form-container">
    {{-- Puoi passare action e method come props se vuoi rendere il form più dinamico --}}
    {{-- Esempio: <form action="{{ $action }}" method="POST"> --}}
    <form id="equipmentForm" action="{{ route('equipment.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <fieldset>
            <legend>Sezione 1: Dati Identificativi</legend>
            
            <div class="form-group">
                <label for="codice_id">Codice Identificativo / Asset Tag</label>
                <input type="text" id="codice_id" name="codice_id" value="{{ old('codice_id') }}" class="@error('codice_id') is-invalid @enderror" placeholder="Es. CUC-001" required>
                @error('codice_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nome_attrezzatura">Nome Attrezzatura</label>
                <input type="text" id="nome_attrezzatura" name="nome_attrezzatura" value="{{ old('nome_attrezzatura') }}" class="@error('nome_attrezzatura') is-invalid @enderror" placeholder="Es. Forno a convezione" required>
                 @error('nome_attrezzatura')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select id="categoria" name="categoria" class="@error('categoria') is-invalid @enderror">
                    <option value="cottura" @selected(old('categoria') == 'cottura')>Cottura</option>
                    <option value="refrigerazione" @selected(old('categoria') == 'refrigerazione')>Refrigerazione</option>
                    <option value="preparazione" @selected(old('categoria') == 'preparazione')>Preparazione</option>
                    <option value="lavaggio" @selected(old('categoria') == 'lavaggio')>Lavaggio</option>
                    <option value="stoccaggio" @selected(old('categoria') == 'stoccaggio')>Stoccaggio</option>
                    <option value="altro" @selected(old('categoria') == 'altro')>Altro</option>
                </select>
                @error('categoria')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            {{-- Aggiungi gli altri campi seguendo lo stesso pattern --}}
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" id="marca" name="marca" value="{{ old('marca') }}" placeholder="Es. Rational">
            </div>

        </fieldset>

        <fieldset>
            <legend>Sezione 2: Dati di Acquisto e Garanzia</legend>
             <div class="form-group">
                <label for="data_acquisto">Data di Acquisto</label>
                <input type="date" id="data_acquisto" name="data_acquisto" value="{{ old('data_acquisto') }}">
            </div>
            <div class="form-group">
                <label>Stato Garanzia</label>
                <div class="radio-group">
                    <label><input type="radio" name="stato_garanzia" value="in_garanzia" @checked(old('stato_garanzia') == 'in_garanzia')> In garanzia</label>
                    <label><input type="radio" name="stato_garanzia" value="scaduta" @checked(old('stato_garanzia', 'scaduta') == 'scaduta')> Garanzia scaduta</label>
                    <label><input type="radio" name="stato_garanzia" value="non_applicabile" @checked(old('stato_garanzia') == 'non_applicabile')> Non applicabile</label>
                </div>
            </div>
            <div id="garanzia-data-container" class="form-group" style="{{ old('stato_garanzia') == 'in_garanzia' ? 'display: block;' : 'display: none;' }}">
                <label for="scadenza_garanzia">Scade il:</label>
                <input type="date" id="scadenza_garanzia" name="scadenza_garanzia" value="{{ old('scadenza_garanzia') }}">
            </div>
        </fieldset>

        <fieldset>
            <legend>Sezione 5: Documentazione e Note</legend>
            <div class="form-group">
                <label for="foto">Foto dell'Attrezzatura</label>
                <input type="file" id="foto" name="foto" class="@error('foto') is-invalid @enderror" accept="image/*">
                 @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="note">Note Aggiuntive</label>
                <textarea id="note" name="note" placeholder="Eventuali difetti noti, accessori inclusi...">{{ old('note') }}</textarea>
            </div>
        </fieldset>

        <button type="submit" class="submit-btn">Salva Attrezzatura</button>
    </form>
</div>

  
 
 </x-layout>