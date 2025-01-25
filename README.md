# PHP Function Bug: Incorrect Zero Handling

This repository demonstrates a common error in PHP functions involving zero inputs. The function `foo` incorrectly returns 0 when either `a` or `b` is 0.  This can lead to unexpected behavior in applications. The solution demonstrates how to correctly handle zero division using exceptions or error codes for improved robustness and error management.

## Bug Description

The `foo` function is designed to divide `a` by `b`. However, it incorrectly returns 0 when either input is 0, which masks a potential division-by-zero error.  This is a subtle bug that might be hard to detect without thorough testing.