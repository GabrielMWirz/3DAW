<!DOCTYPE hmtl>
<html lang = "pt-BR">

    <head>
       <meta charset="UTF-8">
       <title>LOJA DAW</title>
    </head>

    <style>
        body {
          background-color: #A9A9A9;
        }
    </style>


    <body>
        <h1>PRODUTOS</h1>

        <table>
			<tr>
				<th>ID</th>
				<th>produto</th>
				<th>valor unitário</th>
			</tr>

			<tr>
				<td>21</td>
				<td>Boticario Cuide-se Bem (Cachos Exuberantes) - Shampoo Cachos 250 Ml</td>

				<td>R$22,99</td>
			</tr>
			<tr>
				<td>22</td>
				<td>Boticario Cuide-se Bem (Cachos Exuberantes)  - Condicionador 250 Ml</td>
				<td>R$23,99</td>
			</tr>
			<tr>
				<td>23</td>
				<td>Boticario Cuide-se Bem (Cachos Exuberantes) - Condicionador 250 Ml</td>
				<td>R$24,99</td>
			</tr>
            <tr>
				<td>24</td>
				<td>Boticario Cuide-se Bem (Liso Perfeito)  - Shampoo Alisador 250 Ml</td>
				<td>R$25,99</td>
			</tr>
            <tr>
				<td>25</td>
				<td>Boticario Cuide-se Bem (Liso Perfeito) - Shampoo Alisador 250 Ml</td>
				<td>R$22,99</td>
			</tr>
            <tr>
				<td>26</td>
				<td>Boticario Cuide-se Bem (Liso Perfeito) - Condicionador 250 Ml</td>
				<td>R$24,99</td>
			</tr>
            <tr>
				<td>27</td>
				<td>Boticario Cuide-se Bem (Restauracao Extraordinaria)  - Condicionador 250 Ml</td>
				<td>R$24,99</td>
			</tr>
            <tr>
				<td>28</td>
				<td>Boticario Cuide-se Bem (Restauracao Extraordinaria) - Condicionador 250 Ml</td>
				<td>R$24,99</td>
			</tr>
            <tr>
				<td>29</td>
				<td>Boticario Cuide-se Bem (Hidratacao Imediata)  - Shampoo Hidratante 250 Ml</td>
				<td>R$24,99</td>
			</tr>
            <tr>
				<td>30</td>
				<td>Boticario Cuide-se Bem (Hidratacao Imediata) - Shampoo Hidratante 250 Ml</td>
				<td>R$24,99</td>
			</tr>

		</table>
		<br>
        <form action="add.php" method="POST">
			<label>ID do produto</label>
            <input type="number" max="30" min="21" id="id">
			<br>
			<label>Quantidade do produto</label>
            <input type="number" min="1" id="quant">
			<br>
			<a type="submit" href="carrinho.php">Adicionar ao carrinho</button>
       </form>

    </body>

</html>
