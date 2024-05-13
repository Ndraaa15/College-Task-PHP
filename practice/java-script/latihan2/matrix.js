// Function to transpose a matrix
function transposeMatrix(matrix) {
  const rows = matrix.length;
  const cols = matrix[0].length;
  const transposed = [];

  for (let j = 0; j < cols; j++) {
      transposed[j] = [];
      for (let i = 0; i < rows; i++) {
          transposed[j][i] = matrix[i][j];
      }
  }

  return transposed;
}

// Function to add two matrices
function addMatrices(matrix1, matrix2) {
  if (matrix1.length !== matrix2.length || matrix1[0].length !== matrix2[0].length) {
      return "Matrices must have the same dimensions for addition.";
  }

  const result = [];

  for (let i = 0; i < matrix1.length; i++) {
      result[i] = [];
      for (let j = 0; j < matrix1[0].length; j++) {
          result[i][j] = matrix1[i][j] + matrix2[i][j];
      }
  }

  return result;
}

// Function to multiply two matrices
function multiplyMatrices(matrix1, matrix2) {
  const rowsA = matrix1.length;
  const colsA = matrix1[0].length;
  const rowsB = matrix2.length;
  const colsB = matrix2[0].length;

  if (colsA !== rowsB) {
      return "Number of columns in the first matrix must be equal to the number of rows in the second matrix for multiplication.";
  }

  const result = [];

  for (let i = 0; i < rowsA; i++) {
      result[i] = [];
      for (let j = 0; j < colsB; j++) {
          result[i][j] = 0;
          for (let k = 0; k < colsA; k++) {
              result[i][j] += matrix1[i][k] * matrix2[k][j];
          }
      }
  }

  return result;
}

// Function to calculate the inverse of a 2x2 matrix
function invertMatrix(matrix) {
  if (matrix.length !== 2 || matrix[0].length !== 2 || matrix[1].length !== 2) {
      return "Only 2x2 matrices are supported for inversion.";
  }

  const determinant = matrix[0][0] * matrix[1][1] - matrix[0][1] * matrix[1][0];
  if (determinant === 0) {
      return "The determinant is zero. The matrix is not invertible.";
  }

  const inverseDeterminant = 1 / determinant;
  const inverted = [
      [matrix[1][1] * inverseDeterminant, -matrix[0][1] * inverseDeterminant],
      [-matrix[1][0] * inverseDeterminant, matrix[0][0] * inverseDeterminant]
  ];

  return inverted;
}



const matrixA = [[1, 2], [3, 4]];
const matrixB = [[5, 6], [7, 8]];

console.log("Transposing Matrix:");
console.log(transposeMatrix(matrixA));
console.log("Adding Matrix:"); 
console.log(addMatrices(matrixA, matrixB));
console.log("Multiplying Matrix:");
console.log(multiplyMatrices(matrixA, matrixB));
console.log("Inverting Matrix:");
console.log(invertMatrix(matrixA));
