<form action="{{ route('kontakty.store') }}" method="POST">
    @csrf
    <div style="margin-bottom: 16px;">
        <label for="meno">Meno:</label>
        <input type="text" name="meno" id="meno" required>
    </div>
    <div style="margin-bottom: 16px;">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div style="margin-bottom: 16px;">
        <label for="telefone_cislo">Telefónne číslo:</label>
        <input type="text" name="telefone_cislo" id="telefone_cislo">
    </div>
    <div style="margin-bottom: 16px;">
        <label for="description">Popis:</label>
        <textarea name="description" id="description"></textarea>
    </div>
    <button type="submit">Save</button>
</form>
