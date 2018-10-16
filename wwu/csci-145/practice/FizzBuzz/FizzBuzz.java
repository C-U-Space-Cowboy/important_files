class FizzBuzz {
	public static void fizzBuzz(int end) {
		for (int i = 1; i <= end; i++) {
			if (i % 3 == 0)
				System.out.print("Fizz");
			if (i % 5 == 0)
				System.out.print("Buzz");
			else if (i % 3 != 0)
				System.out.print(i);
			System.out.println();
		}
	}
	public static void main(String[] args) {
		fizzBuzz(15);
	}
}
