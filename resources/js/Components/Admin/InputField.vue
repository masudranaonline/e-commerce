
<template>
    <div class="form-group">
        <label :for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ label }}</label>
        <input
            :type="type"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            :id="id"
            :placeholder="placeholder"
            :value="modelValue"
            @input="onInput"
            @blur="onBlur">
        <small>{{info}}</small>

        <div v-if="error" class="text-danger">{{ error }}</div>

        <div v-if="touched">
            <div v-for="error in errors" :key="error" class="text-danger">{{ error }}</div>
        </div>
    </div>
</template>

<script>

const defaultRules = {
    required,
    minLength,
    emailFormat,
    alphanumericOnly,
    noSpecialCharacters,
    numberRange,
    maxLength,
    urlFormat,
    phoneNumberFormat,
    numericOnly,
    uppercaseOnly,
    lowercaseOnly,
    matchesPattern,
    dateValidationMMDDYYYY
};

export default {
    props: {
        validationRuleNames: {
            type: Array,
            default: () => []
        },
        label: String,
        type: {
            type: String,
            default: 'text'
        },
        placeholder: String,
        modelValue: {
            type: [String, Number],
            default: ''
        },
        id: {
            type: String,
            default: ''
        },
        info: {
            type: String,
            default: ''
        },
        error: {
            type: String,
            default: null
        }
    },
    data() {
        return {
            touched: false,
            errors: []
        };
    },
    computed: {
        validationFunctions() {
            return this.validationRuleNames.map(ruleName => defaultRules[ruleName]);
        }
    },
    watch: {
        modelValue(newValue) {
            if (this.touched) {
                this.errors = this.validationFunctions.map(rule => rule(newValue)).filter(Boolean);
            }
        }
    },
    methods: {
        onInput(event) {
            this.$emit('update:modelValue', event.target.value);
        },
        onBlur() {
            this.touched = true;
            this.errors = this.validationFunctions.map(rule => rule(this.modelValue)).filter(Boolean);
        }
    }
}
</script>