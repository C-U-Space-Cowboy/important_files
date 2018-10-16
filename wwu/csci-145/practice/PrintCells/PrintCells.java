class PrintCells {
	public static void printCells(int r, int c) {
		for (int i = 0; i < r; i++) {
			for (int j = 0; j < c; j++) {
				System.out.print(i + "/" + j + " ");
			}
			System.out.println();
		}
	}
	public static void main(String[] args) {
		printCells(5, 5);
	}
}
