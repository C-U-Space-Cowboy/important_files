import java.util.*;
class StringManipulator {
	public static boolean checkEquals(String s, String t) {
		if (s.length() != t.length())
			return false;
		if (s.length() == 1)
			return s.charAt(0) == t.charAt(0);
		return s.charAt(0) == t.charAt(0) && checkEquals(s.substring(1), t.substring(1));
	}

	public static String reverseString(String s) {
		if (s.length() <= 1)
			return s;
		return s.charAt(s.length() - 1) + reverseString(s.substring(0, s.length() - 1));
	}

	private static String password = "111";
	public static void verifyPassword () {
		Scanner sc = new Scanner(System.in);
		System.out.println("Please enter your password");
		String s = sc.nextLine();
		while (!password.equals(s)){
			if (s.equals("quit")) {
				System.out.println("As you wish");
				System.exit(0);
			}
			System.out.println("Wrong password\n");
			System.out.println("Please enter your password");
			s = sc.nextLine();
		}
		System.out.println("Password correct");
	}

	public static void main (String[] args) {
		verifyPassword();
	}
}
